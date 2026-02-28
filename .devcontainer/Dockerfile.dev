FROM mcr.microsoft.com/devcontainers/php:1-8.2-bookworm

# Remover repo quebrado do Yarn
RUN rm -f /etc/apt/sources.list.d/yarn.list

RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    libicu-dev \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install \
    pdo \
    pdo_sqlite \
    intl \
    zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Node 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /workspace