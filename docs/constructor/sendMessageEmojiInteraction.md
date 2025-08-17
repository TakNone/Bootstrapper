# sendMessageEmojiInteraction

**Description** : *User has clicked on an animated emoji triggering a reaction, click here for more info »*

**Layer** : 211

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
	emoticon : 'Isu3TSD5nEMgcvQq',
	msg_id : 99,
	interaction : $client->dataJSON(
		data : 'GuSP2FY3MbLwnQky',
	),
);
```