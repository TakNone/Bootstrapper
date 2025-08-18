# updateMessageExtendedMedia

**Description** : *You bought a paid media &raquo;: this update contains the revealed media*

**Layer** : 211

```tl
updateMessageExtendedMedia#d5a41724 peer:Peer msg_id:int extended_media:Vector<MessageExtendedMedia> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer where the paid media was posted |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message containing the paid media |
| <mark>extended_media</mark> | [`Vector<MessageExtendedMedia>`](type/MessageExtendedMedia) | Revealed media, contains only messageExtendedMedia constructors |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessageExtendedMedia(
	peer : $client->peerUser(
		user_id : 4538858553284741165,
	),
	msg_id : 19,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 82,
			h : 29,
			thumb : $client->photoSizeEmpty(
				type : 'SD41kauFzTqQApls',
			),
			video_duration : 77,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```