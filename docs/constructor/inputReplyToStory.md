# inputReplyToStory

**Description** : *Reply to a story*

**Layer** : 216

```tl
inputReplyToStory#5881323a peer:InputPeer story_id:int = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Sender of the story |
| <mark>story_id</mark> | [`int`](type/int) | ID of the story to reply to |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToStory(
	peer : $client->inputPeerEmpty(),
	story_id : 43,
);
```