# invokeWithReCaptcha

**Description** : *Official clients only: re\-execute a method call that required reCAPTCHA verification via a RECAPTCHA\_CHECK\_%s\_\_%s, where the first placeholder is the action, and the second one is the reCAPTCHA key ID*

**Layer** : 218

```tl
invokeWithReCaptcha#adbb0f94 {X:Type} token:string query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | reCAPTCHA token received after verification |
| <mark>query</mark> | [`!X`](type/X) | The original method call |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithReCaptcha(
	token : 'IfAPEd0YOJQLpyoi',
	query : $client->help->getConfig(raw : true),
);
```