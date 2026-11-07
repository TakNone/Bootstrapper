# inputChatTheme

**Description** : *Set an emoji\-based chat theme, returned by account\.getChatThemes*

**Layer** : 233

```tl
inputChatTheme#c93de95c emoticon:string = InputChatTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji |

---

## Type

[InputChatTheme](type/InputChatTheme)

---

## Example

```php
$inputChatTheme = $client->inputChatTheme(
	emoticon : 'Y0e1vqoRdBMDPjpN',
);
```