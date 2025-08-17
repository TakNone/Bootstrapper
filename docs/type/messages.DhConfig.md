# messages.DhConfig

**Description** : *Contains Diffie-Hellman key generation protocol parameters*

**Layer** : 211

```tl
messages.dhConfigNotModified#c0e24635 random:bytes = messages.DhConfig;
messages.dhConfig#2c221edd g:int p:bytes version:int random:bytes = messages.DhConfig;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.dhConfigNotModified**](constructor/messages.dhConfigNotModified) | Configuring parameters did not change |
| [**messages.dhConfig**](constructor/messages.dhConfig) | New set of configuring parameters |