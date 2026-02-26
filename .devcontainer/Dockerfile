FROM mcr.microsoft.com/devcontainers/php:1-8.2-bookworm

# Remover repo quebrado do Yarn
RUN rm -f /etc/apt/sources.list.d/yarn.list

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    libicu-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install \
    pdo \
    pdo_sqlite \
    intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Node 20 oficialmente (sem usar feature)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /workspace