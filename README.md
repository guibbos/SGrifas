# Rifa Fácil - PHP/MySQL

## Instalação
1. Crie/importa o banco usando `database.sql`.
2. Edite `config/database.php` com host, banco, usuário e senha MySQL.
3. Coloque a pasta no Apache/Nginx com PHP 8+ e PDO MySQL.
4. Abra `/`.
5. Painel: `/admin/login.php`.

Login inicial: `admin@rifa.local` / `password`. Troque em produção.

## Incluído
- Rifas selecionáveis ou aleatórias por campanha.
- Reserva de números com restrição única no banco.
- Pedidos pendente/pago/cancelado.
- Consulta de bilhetes.
- Painel para criar rifas e gerenciar pedidos.

## Antes de produção
Adicione CSRF, expiração automática de reservas, upload seguro de imagens, recuperação de senha, logs, rate limit, HTTPS e integração oficial de pagamento/webhook. Confirme também os requisitos legais aplicáveis ao modelo de campanha que você pretende operar.
