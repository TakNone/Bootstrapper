# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 225

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
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
		id : 68,
		title : $client->textWithEntities(
			text : 'zXT4xUIWCgyad2A9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 2,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 40,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 87,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 66,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : '2vAaiDXU7gOwJNST',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 1,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : 870248768942648687,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 94,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 34,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 13,
					document_id : -6918395193794597688,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 83,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 31,
					date : 73,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 10,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 32,
					old_text : 'PlR2Ty5YQIwH3vqn',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 49,
				),
			),
		),
		emoticon : 'HpnN1r2f7uhOjFlT',
		color : 82,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : '5o94inbBaO83Mvuw',
);
```