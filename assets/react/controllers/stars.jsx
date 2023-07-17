import React from 'react';


const StarRating = ({ notation }) => {
  const note = notation;
  const activeStars = parseInt(note, 10);
  const inactiveStars = 5 - activeStars;

  return (
    <div className="star-rating">
      {[...Array(activeStars)].map((star, index) => {
        return (
          <svg
            key={index + 5}
            width="36"
            height="36"
            viewBox="0 0 36 36"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M21.645 15L18 3L14.355 15H3L12.27 21.615L8.745 33L18 25.965L27.27 33L23.745 21.615L33 15H21.645Z"
              fill="#e5af2f"
            />
          </svg>
        );
      })}
      {[...Array(inactiveStars)].map((star, index) => {
        return (
          <svg
            key={index + 10}
            width="36"
            height="36"
            viewBox="0 0 36 36"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M21.645 15L18 3L14.355 15H3L12.27 21.615L8.745 33L18 25.965L27.27 33L23.745 21.615L33 15H21.645Z"
              fill="#d4d9dd"
            />
          </svg>
        );
      })}
    </div>
  );
};

export default StarRating;