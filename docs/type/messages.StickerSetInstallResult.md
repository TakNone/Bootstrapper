# messages.StickerSetInstallResult

**Description** : *Result of stickerset installation process*

**Layer** : 211

```tl
messages.stickerSetInstallResultSuccess#38641628 = messages.StickerSetInstallResult;
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.stickerSetInstallResultSuccess**](constructor/messages.stickerSetInstallResultSuccess) | The stickerset was installed successfully |
| [**messages.stickerSetInstallResultArchive**](constructor/messages.stickerSetInstallResultArchive) | The stickerset was installed, but since there are too many stickersets some were archived |