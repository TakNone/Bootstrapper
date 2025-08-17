# inlineBotSwitchPM

**Description** : *The bot requested the user to message them in private*

**Layer** : 211

```tl
inlineBotSwitchPM#3c20629f text:string start_param:string = InlineBotSwitchPM;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text for the button that switches the user to a private chat with the bot and sends the bot a start message with the parameter start_parameter (can be empty) |
| <mark>start_param</mark> | [`string`](type/string) | The parameter for the /start parameter |

---

## Type

[InlineBotSwitchPM](type/InlineBotSwitchPM)

---

## Example

```php
$inlineBotSwitchPM = $client->inlineBotSwitchPM(
	text : 'TF4mz3W9jDdnc8yg',
	start_param : 'exp32XNzGB8KYQ9M',
);
```