# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 227

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : 5005162013318601146,
	),
	max_read_id : 88,
	stories : array(
		$client->storyItemDeleted(
			id : 2,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 70,
			date : 12,
			expire_date : 14,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 69,
			date : 73,
			from_id : $client->peerUser(
				user_id : 1239810869688905499,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 784888363520733878,
				),
				from_name : 'nZwXP5grehdy21TE',
				story_id : 38,
			),
			expire_date : 72,
			caption : 's2y0FODH1lEhkMei',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 70,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 66,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 25,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 90,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 5,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 3,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 1,
					language : 'mKAyEfTlUMjptWZB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 1,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 5180257443072030932,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 59,
					document_id : -5112758612763904886,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 94,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 18,
					date : 37,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 60,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 68,
					old_text : 'O6KaSmuFsrQ2XVTf',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 82,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 856626.419921875,
						y : 761413.5361328125,
						w : -1640830.63671875,
						h : 802340.1875,
						rotation : -1440861.705078125,
						radius : 1075683.1318359375,
					),
					geo : $client->geoPointEmpty(),
					title : 'EAaC3uTOZhzvoyJY',
					address : 'JEUbF7KcX8CAyLPR',
					provider : 'uMZ52NLlxXmefKqQ',
					venue_id : 'LGhgHDxdUmMre2Jf',
					venue_type : 'vbIKJ5uWP9XwLGOt',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 1125366.71484375,
						y : 1337370.4619140625,
						w : -921337.7255859375,
						h : -958953.9306640625,
						rotation : -1319405.5771484375,
						radius : 1253796.8134765625,
					),
					query_id : -194723104846558413,
					result_id : '0QpfD2C9dVeuMq8E',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 721704.9541015625,
						y : -433289.84765625,
						w : 344774.1015625,
						h : -172398.1240234375,
						rotation : 1894212.34375,
						radius : 109703.6513671875,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : '7jrT9vtihPX0DdeO',
						state : 'RHNFiYAaJqMKdXtS',
						city : 'OemIpvW4dBZhzRAa',
						street : 'CQmgniKySNb0jtdz',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -1790539.4853515625,
						y : -1058714.5126953125,
						w : -519739.3603515625,
						h : -641309.2822265625,
						rotation : -589070.25,
						radius : 799352.5478515625,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 862552.7177734375,
						y : 863724.6884765625,
						w : 1830834.447265625,
						h : 1192653.228515625,
						rotation : 1424130.384765625,
						radius : -882008.689453125,
					),
					channel_id : 496358321493791028,
					msg_id : 83,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 536455.18359375,
						y : -881329.40625,
						w : 1930802.619140625,
						h : -424869.3095703125,
						rotation : 1963228.474609375,
						radius : 776032.349609375,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 45,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -2006064.01171875,
						y : -1694723.130859375,
						w : -1747197.7099609375,
						h : 1496694.7421875,
						rotation : 803453.650390625,
						radius : -719558.171875,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -971354.8359375,
						y : 676416.1494140625,
						w : -669635.8125,
						h : 207347.5283203125,
						rotation : 1062253.4755859375,
						radius : 462313.833984375,
					),
					emoji : 'jqHMV7uvgKe1hZ9p',
					temperature_c : 431758.1484375,
					color : 85,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -762133.2734375,
						y : 1454681.78515625,
						w : -1934248.5771484375,
						h : 1299697.7890625,
						rotation : 547977.296875,
						radius : 581552.9970703125,
					),
					slug : 'RdrD7Ak6bXtzFCuL',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-6365530264017488788),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(782780823414398666),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-1112480166789441677),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4507190236490124836),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 38,
				forwards_count : 63,
				reactions : array(
					$client->reactionCount(
						chosen_order : 77,
						reaction : $client->reactionEmpty(...),
						count : 89,
					),
				),
				reactions_count : 33,
				recent_viewers : array(5725392428828304997),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(33),
			music : $client->documentEmpty(
				id : -256294822299325725,
			),
		),
	),
);
```