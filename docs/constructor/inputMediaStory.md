# inputMediaStory

**Description** : *Forwarded story*

**Layer** : 216

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
	peer : $client->inputPeerEmpty(),
	id : 84,
);
```