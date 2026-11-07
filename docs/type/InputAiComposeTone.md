# InputAiComposeTone

**Description** : *References an AI composer tone &raquo;, either a built\-in default tone or a custom one \(by ID or slug\)*

**Layer** : 233

```tl
inputAiComposeToneDefault#1fe9a9bf tone:string = InputAiComposeTone;
inputAiComposeToneID#773c080 id:long access_hash:long = InputAiComposeTone;
inputAiComposeToneSlug#1fa01357 slug:string = InputAiComposeTone;
inputAiComposeToneSingleUse#e0c35af custom_prompt:string = InputAiComposeTone;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputAiComposeToneDefault**](constructor/inputAiComposeToneDefault) | References a built-in, default AI composer tone » by its string identifier |
| [**inputAiComposeToneID**](constructor/inputAiComposeToneID) | References a custom AI composer tone » by its ID and access hash |
| [**inputAiComposeToneSlug**](constructor/inputAiComposeToneSlug) | References a custom AI composer tone » by its public slug, used when opening an AI compose tone link » |
| [**inputAiComposeToneSingleUse**](constructor/inputAiComposeToneSingleUse) | NOTHING |