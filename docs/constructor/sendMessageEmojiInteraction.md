# sendMessageEmojiInteraction

**Description** : *User has clicked on an animated emoji triggering a reaction, click here for more info &raquo;*

**Layer** : 216

```tl
sendMessageEmojiInteraction#25972bcb emoticon:string msg_id:int interaction:DataJSON = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of the animated emoji that was clicked |
| <mark>interaction</mark> | [`DataJSON`](type/DataJSON) | A JSON object with interaction info, click here for more info » |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageEmojiInteraction(
	emoticon : 'nUkR1m6oNJdVezgx',
	msg_id : 90,
	interaction : $client->dataJSON(
		data : 'T8UnHaGD9imbtAVC',
	),
);
```