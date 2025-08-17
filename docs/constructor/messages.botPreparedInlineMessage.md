# messages.botPreparedInlineMessage

**Description** : *Represents a prepared inline message saved by a bot, to be sent to the user via a web app »*

**Layer** : 211

```tl
messages.botPreparedInlineMessage#8ecf0511 id:string expire_date:int = messages.BotPreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | The ID of the saved message, to be passed to the id field of the web_app_send_prepared_message event » |
| <mark>expire_date</mark> | [`int`](type/int) | Expiration date of the message |

---

## Type

[messages.BotPreparedInlineMessage](type/messages.BotPreparedInlineMessage)

---

## Example

```php
$messagesBotPreparedInlineMessage = $client->messages->botPreparedInlineMessage(
	id : 'GEY5taQkr4zC89Th',
	expire_date : 9,
);
```