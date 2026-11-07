# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 233

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
		id : 77,
		title : $client->textWithEntities(
			text : 'OUx9G23XgpbIwlZV',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 90,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 50,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 63,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 58,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 64,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 7,
					language : 'AjYKzmhEViFbR9aD',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 73,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : 2885867416676131900,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 24,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 57,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 91,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 2,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : 191735444937586788,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 98,
					date : 96,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 1,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 33,
					old_text : '5o0VQ4sl6JDuHICz',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 46,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 79,
				),
			),
		),
		emoticon : 'J6tjW1Mn2FBH7VIf',
		color : 6,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : '8jiQRwtVUz7ZYAXL',
);
```