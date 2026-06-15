# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 227

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
	id : 61,
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
		id : 53,
		title : $client->textWithEntities(
			text : 'KIDbCmULjVh0sOMi',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 69,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 78,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 96,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 76,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 44,
					language : 'BsZGTwi1MtDSy2VH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 93,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 90,
					user_id : -5001778029056675297,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 20,
					document_id : 3737187405485230566,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 11,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 25,
					date : 51,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 24,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 93,
					old_text : 'kncZExiRKSeFvXlU',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 8,
				),
			),
		),
		emoticon : 'u69znZB30weM2EKF',
		color : 97,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```