# stories.createAlbum

**Description** : *Creates a story album*

**Layer** : 218

```tl
stories.createAlbum#a36396e5 peer:InputPeer title:string stories:Vector<int> = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The owned peer where to create the album |
| <mark>title</mark> | [`string`](type/string) | Album name |
| <mark>stories</mark> | [`Vector<int>`](type/int) | Stories to add to the album |

---

## Result

[StoryAlbum](type/StoryAlbum)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storyAlbum = $client->stories->createAlbum(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	title : '2scahAGX9F6LErWt',
	stories : array(13),
);
```