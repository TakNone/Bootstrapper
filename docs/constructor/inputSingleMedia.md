# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 211

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
	random_id : -7432797423571631713,
	message : 'gexRaEzcUqmjZsBW',
	entities : array(
		$client->messageEntityUnknown(
			offset : 9,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 78,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 78,
			length : 18,
		),
		$client->messageEntityBotCommand(
			offset : 63,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 90,
			length : 99,
		),
		$client->messageEntityEmail(
			offset : 61,
			length : 37,
		),
		$client->messageEntityBold(
			offset : 40,
			length : 13,
		),
		$client->messageEntityItalic(
			offset : 4,
			length : 42,
		),
		$client->messageEntityCode(
			offset : 18,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 100,
			length : 54,
			language : 'uUZwBkY5Qtz89XPm',
		),
		$client->messageEntityTextUrl(
			offset : 18,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 50,
			length : 47,
			user_id : 1590918795704383808,
		),
		$client->inputMessageEntityMentionName(
			offset : 67,
			length : 26,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 34,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 49,
			length : 34,
		),
		$client->messageEntityUnderline(
			offset : 17,
			length : 37,
		),
		$client->messageEntityStrike(
			offset : 100,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 97,
			length : 57,
		),
		$client->messageEntitySpoiler(
			offset : 67,
			length : 54,
		),
		$client->messageEntityCustomEmoji(
			offset : 99,
			length : 64,
			document_id : 5222335422528192777,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 16,
			length : 4,
		),
	),
);
```