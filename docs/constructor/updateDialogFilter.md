# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 229

```tl
updateDialogFilter#26ffde7d flags:# id:int filter:flags.0?DialogFilter = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilter(
	id : 58,
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 29,
		title : $client->textWithEntities(
			text : '7VR0QnsBDfqCUFJo',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 17,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 38,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 9,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 36,
					language : 'pbFWs5ymC1u2LGDV',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : -8715734780173247082,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 22,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 13,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 47,
					document_id : -819583413278158461,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 52,
					date : 53,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 57,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 1,
					old_text : 'XTjyZDRiscx79vo5',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 74,
				),
			),
		),
		emoticon : 'c32N4WzQRKy1xpIf',
		color : 39,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```