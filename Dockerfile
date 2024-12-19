# Use the official Nginx image as the base
FROM nginx:alpine

# Copy the contents of the 40k directory to the Nginx HTML directory
COPY jonnys40kProject /usr/share/nginx/html

# Expose port 80 to make the server accessible
EXPOSE 80