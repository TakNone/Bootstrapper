# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages\.sendMultiMedia*

**Layer** : 216

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
	random_id : -3130284013851584519,
	message : 'h061nfkLOYz8Z9tB',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 58,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 27,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 35,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'pYvUXTiVzJMEytOh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 17,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : 1154121419160963294,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 71,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 98,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 36,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 43,
			document_id : -3235857488542865236,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
		),
	),
);
```