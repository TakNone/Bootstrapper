# inputMediaStory

**Description** : *Forwarded story*

**Layer** : 218

```tl
inputMediaStory#89fdd778 peer:InputPeer id:int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| <mark>id</mark> | [`int`](type/int) | Story ID |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaStory(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 49,
);
```