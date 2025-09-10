# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 214

```tl
inputSingleMedia#1cc6e91f flags:# media:InputMedia random_id:long message:string entities:flags.0?Vector<MessageEntity> = InputSingleMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The media |
| <mark>random_id</mark> | [`long`](type/long) | Unique client media ID required to prevent message resending |
| <mark>message</mark> | [`string`](type/string) | A caption for the media |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[InputSingleMedia](type/InputSingleMedia)

---

## Example

```php
$inputSingleMedia = $client->inputSingleMedia(
	media : $client->inputMediaEmpty(),
	random_id : 6623139643388697279,
	message : '9beN5xVRqtjO2E4Z',
	entities : array(
		$client->messageEntityUnknown(
			offset : 78,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 60,
			length : 30,
		),
		$client->messageEntityHashtag(
			offset : 92,
			length : 21,
		),
		$client->messageEntityBotCommand(
			offset : 48,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 95,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 85,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 27,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 4,
			length : 15,
		),
		$client->messageEntityCode(
			offset : 42,
			length : 25,
		),
		$client->messageEntityPre(
			offset : 95,
			length : 48,
			language : 'tBW4b2HjgvETImQi',
		),
		$client->messageEntityTextUrl(
			offset : 69,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 44,
			length : 88,
			user_id : -6674032379087260211,
		),
		$client->inputMessageEntityMentionName(
			offset : 15,
			length : 16,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 88,
			length : 46,
		),
		$client->messageEntityCashtag(
			offset : 57,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 100,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 17,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 30,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 70,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 18,
			length : 88,
			document_id : -810229550021733789,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 14,
			length : 89,
		),
	),
);
```