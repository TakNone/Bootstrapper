# updateMessageExtendedMedia

**Description** : *You bought a paid media &raquo;: this update contains the revealed media*

**Layer** : 229

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
		user_id : -5179624126857970886,
	),
	msg_id : 50,
	extended_media : array(
		$client->messageExtendedMediaPreview(
			w : 79,
			h : 81,
			thumb : $client->photoSizeEmpty(
				type : 'nHLjQdqtJuiGrxE3',
			),
			video_duration : 100,
		),
		$client->messageExtendedMedia(
			media : $client->messageMediaEmpty(),
		),
	),
);
```