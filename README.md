# SGrifas — GitHub Pages + Supabase

Projeto frontend estático com backend Supabase. Já está configurado com a Project URL e a Publishable Key fornecidas.

## Instalação
1. No Supabase, abra **SQL Editor > New query**.
2. Cole TODO o conteúdo de `supabase.sql` e clique **Run**.
3. Envie `index.html` e a pasta `assets` para a raiz do repositório GitHub Pages.
4. Abra o site, crie sua conta.
5. No SQL Editor execute, trocando pelo seu e-mail:
   `update public.profiles set role='admin' where email='seu@email.com';`
6. Saia e entre novamente. O menu **Admin** aparecerá.
7. Crie a primeira campanha no painel.

## Funcionalidades
- Cadastro/login por e-mail e senha
- Campanhas selecionáveis ou aleatórias
- Números compartilhados entre dispositivos
- Reserva atômica de números e prevenção de duplicidade
- Expiração lógica de reservas após 15 minutos
- Pedidos e área “Meus números”
- Painel admin
- Criar/editar campanhas
- Marcar pedido como pago ou cancelar
- RLS (Row Level Security)
- Layout responsivo

## Pagamentos
O projeto não contém chave secreta de gateway e não simula confirmação automática de pagamento. O administrador pode confirmar pagamentos no painel. Para PIX automático, use uma função backend/Edge Function e webhook do provedor; nunca coloque token secreto no GitHub Pages.

## Observação
A Publishable Key do Supabase é própria para frontend. Nunca adicione `service_role`, `sb_secret_...` ou senha do banco ao repositório público.
