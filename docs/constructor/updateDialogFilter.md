# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 233

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
	id : 75,
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
		id : 9,
		title : $client->textWithEntities(
			text : '6Na5MUZjGJbpTHLo',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 25,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 36,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 88,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'tzV0953Cqi6Bh84R',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 14,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : -8017904010415915626,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 11,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 10,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 92,
					document_id : 2652808325501798052,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 53,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 64,
					date : 10,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 86,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 58,
					old_text : 'YvmTLzUXuBNs61D8',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 90,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 88,
				),
			),
		),
		emoticon : 'dstkSnW0oXbuVyNL',
		color : 99,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```