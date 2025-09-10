# upload.getFile

**Description** : *Returns content of a whole file or its part*

**Layer** : 214

```tl
upload.getFile#be5335be flags:# precise:flags.0?true cdn_supported:flags.1?true location:InputFileLocation offset:long limit:int = upload.File;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **precise** | [`flags.0?true`](type/true) | Disable some checks on limit and offset values, useful for example to stream videos by keyframes |
| **cdn_supported** | [`flags.1?true`](type/true) | Whether the current client supports CDN downloads |
| <mark>location</mark> | [`InputFileLocation`](type/InputFileLocation) | File location |
| <mark>offset</mark> | [`long`](type/long) | Number of bytes to be skipped |
| <mark>limit</mark> | [`int`](type/int) | Number of bytes to be returned |

---

## Result

[upload.File](type/upload.File)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CDN_METHOD_INVALID** | `400` | You can't call this method in a CDN DC |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **FILEREF_UPGRADE_NEEDED** | `406` | The client has to be updated in order to support file references |
| **FILE_ID_INVALID** | `400` | The provided file id is invalid |
| **FILE_REFERENCE_EMPTY** | `400` | An empty file reference was specified |
| **FILE_REFERENCE_EXPIRED** | `400` | File reference expired, it must be refetched as described in the documentation |
| **FLOOD_PREMIUM_WAIT_%d** | `420` | Please wait %d seconds before repeating the action, or purchase a Telegram Premium subscription to remove this rate limit |
| **LIMIT_INVALID** | `400` | The provided limit is invalid |
| **LOCATION_INVALID** | `400` | The provided location is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **OFFSET_INVALID** | `400` | The provided offset is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$uploadFile = $client->upload->getFile(
	precise : true,
	cdn_supported : true,
	location : $client->inputFileLocation(
		volume_id : 5877635590692445152,
		local_id : 29,
		secret : 6614410772111367239,
		file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	offset : 0,
	limit : 96,
);
```