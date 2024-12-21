FROM node:23-alpine

# Set the working directory
WORKDIR /app

# Copy package.json and package-lock.json (if available) first
COPY package.json /app/

# Install dependencies
RUN npm install

# Copy the rest of the application
COPY server.js /app/
COPY public /app/public/

# Command to run the application
CMD [ "node", "server.js" ]
