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
	random_id : 2267058517780039272,
	message : '5DdMUZ93Bx8Oo7bH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 73,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 50,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 70,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'aMELXhOb7DSFVCpe',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 48,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : -2332704554278068150,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 60,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 0,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 40,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 3,
			document_id : 4120457376580883771,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 74,
		),
	),
);
```