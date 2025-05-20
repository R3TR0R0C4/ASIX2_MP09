export const initialLocationsData = [
  {
    id: 1,
    name: "Abandoned Power Plant",
    date: "2023-05-15",
    description:
      "A sprawling industrial complex, silent for decades. The air still smells of oil and rust.",
    remarkableThings:
      "Intact main control room with all dials, towering smokestacks against the sunset.",
    imageUrl:
      "https://images.unsplash.com/photo-1500879928482-657e1599alsj?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9",
  },
  {
    id: 2,
    name: "Forgotten Grand Theatre",
    date: "2023-08-20",
    description:
      "Once a majestic venue for arts, now decaying gracefully under layers of dust.",
    remarkableThings:
      "Ornate balconies still holding their shape, dusty velvet seats in the main hall, remnants of old posters.",
    imageUrl:
      "https://images.unsplash.com/photo-1579704462880-02a34ea91df3?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9",
  },
  // Add more initial locations here if needed
];

// Calculate the next ID based on the initial data, ensuring its higher than any existing ID
const maxId = initialLocationsData.reduce(
  (max, loc) => (loc.id > max ? loc.id : max),
  0
);
export const initialNextId = maxId + 1;
