# stories.exportStoryLink

**Description** : *Generate a story deep link for a specific story*

**Layer** : 218

```tl
stories.exportStoryLink#7b8def20 peer:InputPeer id:int = ExportedStoryLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| <mark>id</mark> | [`int`](type/int) | Story ID |

---

## Result

[ExportedStoryLink](type/ExportedStoryLink)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |
| **USER_PUBLIC_MISSING** | `400` | Cannot generate a link to stories posted by a peer without a username |

---

## Example

```php
$exportedStoryLink = $client->stories->exportStoryLink(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 48,
);
```