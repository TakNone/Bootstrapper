# sendMessageEmojiInteraction

**Description** : *User has clicked on an animated emoji triggering a reaction, click here for more info &raquo;*

**Layer** : 222

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
	emoticon : 'QlpKmD5xNsX8OPbq',
	msg_id : 41,
	interaction : $client->dataJSON(
		data : 'BG4qxF6RHDUASQT2',
	),
);
```