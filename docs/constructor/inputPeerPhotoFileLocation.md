# inputPeerPhotoFileLocation

**Description** : *Location of profile photo of channel/group/supergroup/user*

**Layer** : 214

```tl
inputPeerPhotoFileLocation#37257e99 flags:# big:flags.0?true peer:InputPeer photo_id:long = InputFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **big** | [`flags.0?true`](type/true) | Whether to download the high-quality version of the picture |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer whose profile picture should be downloaded |
| <mark>photo_id</mark> | [`long`](type/long) | Photo ID |

---

## Type

[InputFileLocation](type/InputFileLocation)

---

## Example

```php
$inputFileLocation = $client->inputPeerPhotoFileLocation(
	big : true,
	peer : $client->inputPeerEmpty(),
	photo_id : -8881030107158230032,
);
```