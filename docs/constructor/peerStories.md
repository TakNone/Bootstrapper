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
		user_id : 2252055169040503989,
	),
	max_read_id : 98,
	stories : array(
		$client->storyItemDeleted(
			id : 16,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 46,
			date : 1,
			expire_date : 8,
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
			id : 38,
			date : 36,
			from_id : $client->peerUser(
				user_id : -3304606787319172762,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 1644856861386954843,
				),
				from_name : 'SJ49p0gFrO7UiPwl',
				story_id : 81,
			),
			expire_date : 71,
			caption : 'c938k4NS6sYAZ1Pm',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 66,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 48,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 85,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 1,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 83,
					language : '7Cshc5bRI9z3Xlex',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : -6144902337429098008,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 42,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : 1209497213894843863,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 19,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 99,
					date : 91,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 51,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 45,
					old_text : 'YB72iCxhJZF4tQwr',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 96,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -1576980.55078125,
						y : 1287268.6181640625,
						w : -1666037.296875,
						h : 971061.3359375,
						rotation : 1518984.5751953125,
						radius : -880591.8935546875,
					),
					geo : $client->geoPointEmpty(),
					title : 'H0FcEl5Ofemw3guh',
					address : 'ls6em14fzXDFI095',
					provider : 'RCbuyrsw7QiWAcx8',
					venue_id : 'yeft9XWQzNBMs64Y',
					venue_type : 'Ht5SbNsKOGUgQhCE',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -2014734.0126953125,
						y : 835500.86328125,
						w : -2011863.9560546875,
						h : -449577.0498046875,
						rotation : 2010903.4931640625,
						radius : 1360545.9248046875,
					),
					query_id : -6233809108955144865,
					result_id : 't1loWBybgxfS9ICc',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 1021707.5341796875,
						y : -2038697.4755859375,
						w : 272099.7880859375,
						h : -712056.53125,
						rotation : -1337804.3232421875,
						radius : -574575.755859375,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'ILgySNcHDkmtvVY0',
						state : 'NxY0A7hXswkOobZg',
						city : 'A5YmI1cfbHeLWz9n',
						street : 'PVLiwd7eA6kB4q3r',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 1228960.6552734375,
						y : 1679510.796875,
						w : 1045138.86328125,
						h : 705331.369140625,
						rotation : 1441123.310546875,
						radius : 346976.30859375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1316481.3427734375,
						y : 2077046.21875,
						w : -1096962.5703125,
						h : -689378.2099609375,
						rotation : 1283279.2958984375,
						radius : -1465329.2197265625,
					),
					channel_id : -9053727215105629457,
					msg_id : 74,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1674765.3447265625,
						y : -1709559.935546875,
						w : 1313184.3720703125,
						h : -31240.626953125,
						rotation : -792182.3935546875,
						radius : -1592873.6708984375,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 11,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 492781.0625,
						y : 1954299.4443359375,
						w : 205359.41796875,
						h : -329747.2392578125,
						rotation : 187373.6533203125,
						radius : -588613.45703125,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -2068785.02734375,
						y : -1545155.9228515625,
						w : -2063559.724609375,
						h : 174662.724609375,
						rotation : -1659989.970703125,
						radius : -1025937.431640625,
					),
					emoji : 'VSyUApBLTvPZqtOI',
					temperature_c : -1127357.23828125,
					color : 83,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -1736532.40625,
						y : -2018014.8955078125,
						w : -763809.4892578125,
						h : 1632810.0771484375,
						rotation : 2063018.796875,
						radius : -461497.6337890625,
					),
					slug : 'a5IUQbZoOcHGkXuT',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(8679383948728175014),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1798586603246851001),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(3663097372151325477),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4888823471283406911),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 16,
				forwards_count : 84,
				reactions : array(
					$client->reactionCount(
						chosen_order : 83,
						reaction : $client->reactionEmpty(...),
						count : 81,
					),
				),
				reactions_count : 76,
				recent_viewers : array(3943638700352638726),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(22),
			music : $client->documentEmpty(
				id : -5222430120469547358,
			),
		),
	),
);
```