<?php

// Este arquivo é chamado quando o usuário/atacante tenta ver "/app/views/" e simplesmente devolve um erro 403.
// Este é o método mais simples para impedir que as pessoas olhem para uma pasta quando mod_rewrite não está ativado.
exit(header('HTTP/1.0 403 Forbidden'));
