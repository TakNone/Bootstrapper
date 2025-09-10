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
	random_id : 4002881626956708526,
	message : 'GTvz3qUJoRYsZp6w',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 38,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 69,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 42,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 74,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 51,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 53,
			language : 'nNg7ohm56UlWF0ZM',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 59,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : -7104102461379889177,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 53,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 8,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 39,
			document_id : -7632509176818032184,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 32,
		),
	),
);
```