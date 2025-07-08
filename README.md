# 🌐 iCanada Reparos - PWA

Este é o site oficial da **iCanada Reparos**, uma assistência técnica especializada em dispositivos Apple (MacBook, iMac, iPhone, iPad), desenvolvido como um **Progressive Web App (PWA)** moderno e leve.

## 🚀 Funcionalidades

- ✅ Design responsivo (mobile first)
- ✅ Lightbox para visualização de portfólio
- ✅ Navegação leve e sem redirecionamentos desnecessários
- ✅ **PWA instalado**: pode ser adicionado à tela inicial (Android/iOS/Desktop)
- ✅ Ícones em alta resolução (`192x192`, `512x512`)
- ✅ Manifest e Service Worker implementados

## 📁 Estrutura do projeto

```
📁 assets/
📁 forms/
📄 index.html
📄 portfolio-details.html
📄 manifest.json
📄 service-worker.js
📄 favicon.ico
```

## 🧪 Testar localmente

Você pode abrir o `index.html` diretamente em um navegador moderno **via HTTPS** ou usar um servidor local:

```bash
npx serve .
```

## 🌐 Hospedagem com Netlify

O site está pronto para deploy em plataformas como [Netlify](https://www.netlify.com) ou [Vercel](https://vercel.com).

### Etapas:

1. Suba este repositório para o GitHub
2. Acesse o [Netlify](https://app.netlify.com/)
3. Clique em "Import from Git" e conecte seu repositório
4. Publique (sem build necessário para HTML)

## 📱 Experiência PWA

- O site pode ser **instalado como app** em celulares e desktops
- O `manifest.json` define:
  - Nome e tema
  - Ícones
  - Comportamento standalone
- O `service-worker.js` garante carregamento mesmo offline

## 🛠️ Tecnologias usadas

- HTML5 + CSS3 + JavaScript
- [AOS.js](https://michalsnik.github.io/aos/) (animações)
- GLightbox (galeria)
- Google Fonts
- Progressive Web App (PWA)

## 👨‍💻 Desenvolvido por

[icanadareparos.com.br](https://www.icanadareparos.com.br)  
Contato: [icanadareparos@gmail.com](mailto:icanadareparos@gmail.com)

---

**Última atualização:** Julho de 2025
