# Start your image with a node base image
FROM nginx:1.17.1-alpine

COPY src/jonnys40kProject /usr/share/nginx/html