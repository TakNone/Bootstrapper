# inputSingleMedia

**Description** : *A single media in an album or grouped media sent with messages.sendMultiMedia*

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
	random_id : 7005600305993655880,
	message : 'SL9te32mOHv7ZhXo',
	entities : array(
		$client->messageEntityUnknown(
			offset : 93,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 66,
			length : 84,
		),
		$client->messageEntityHashtag(
			offset : 24,
			length : 90,
		),
		$client->messageEntityBotCommand(
			offset : 77,
			length : 22,
		),
		$client->messageEntityUrl(
			offset : 74,
			length : 47,
		),
		$client->messageEntityEmail(
			offset : 38,
			length : 55,
		),
		$client->messageEntityBold(
			offset : 49,
			length : 17,
		),
		$client->messageEntityItalic(
			offset : 72,
			length : 48,
		),
		$client->messageEntityCode(
			offset : 4,
			length : 3,
		),
		$client->messageEntityPre(
			offset : 20,
			length : 89,
			language : 'Z4v2cBeVCQPmqAWu',
		),
		$client->messageEntityTextUrl(
			offset : 68,
			length : 31,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 79,
			user_id : 7402057426520241146,
		),
		$client->inputMessageEntityMentionName(
			offset : 47,
			length : 64,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 89,
			length : 50,
		),
		$client->messageEntityCashtag(
			offset : 57,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 92,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 6,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 17,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 86,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 21,
			length : 26,
			document_id : -5635900864518664513,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 29,
			length : 37,
		),
	),
);
```