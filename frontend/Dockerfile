FROM node:latest
WORKDIR /home/node/app
COPY package*.json ./
RUN  npm install
EXPOSE 8080
CMD ["npm", "run", "dev"]