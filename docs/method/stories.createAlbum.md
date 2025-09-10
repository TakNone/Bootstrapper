# stories.createAlbum

**Layer** : 214

```tl
stories.createAlbum#a36396e5 peer:InputPeer title:string stories:Vector<int> = StoryAlbum;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>stories</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[StoryAlbum](type/StoryAlbum)

---

## Example

```php
$storyAlbum = $client->stories->createAlbum(
	peer : $client->inputPeerEmpty(),
	title : 'KT6cRPz4xwVvO5f8',
	stories : array(6),
);
```