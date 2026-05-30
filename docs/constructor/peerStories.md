# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 225

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
		user_id : -3127196371728999968,
	),
	max_read_id : 50,
	stories : array(
		$client->storyItemDeleted(
			id : 18,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 37,
			date : 14,
			expire_date : 33,
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
			id : 56,
			date : 83,
			from_id : $client->peerUser(
				user_id : 17227303685749822,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 8507289270257145811,
				),
				from_name : 'VpICtbDeE02F8fyA',
				story_id : 90,
			),
			expire_date : 53,
			caption : 'rSv8m1C3xuAEtWha',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 19,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 43,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 77,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 71,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 12,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 's7nqYpDRwjkWfAdJ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 47,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : -5681110795232330008,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 32,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 99,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 58,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 35,
					document_id : 9077845880859811579,
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
					length : 45,
					date : 88,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 82,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 58,
					old_text : 'Izh76AJGLeyioqP3',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 44,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -656230.408203125,
						y : 138302.7822265625,
						w : -413337.5244140625,
						h : -537647.9580078125,
						rotation : -1033573.0595703125,
						radius : -967658.7841796875,
					),
					geo : $client->geoPointEmpty(),
					title : 'XjN2Omhg4GYoIPUR',
					address : 'H32qtN5rIzp4BPxa',
					provider : 'BaYCQm1MV2K6rl83',
					venue_id : '8yWZQYXPU2dvM09E',
					venue_type : 'cUWmBftrz76JpSPx',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -740687.8212890625,
						y : -42250.806640625,
						w : 383359.8095703125,
						h : 1019464.4091796875,
						rotation : -304279.7421875,
						radius : 1799584.8076171875,
					),
					query_id : 2681113280915704805,
					result_id : 'cZ6KAHxa2FeQ0YiR',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : 1255588.595703125,
						y : -838365.25,
						w : 446269.4150390625,
						h : 974759.123046875,
						rotation : -778611.421875,
						radius : -1623205.6923828125,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'Epx5QgRq2PFYmkwM',
						state : '3812tprPfUQTGBX7',
						city : 'smMcQFvdql8ji5Dp',
						street : '1yQsUCdDN6RnbJZx',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -991502.1298828125,
						y : 550267.134765625,
						w : 1285777.0029296875,
						h : 79518.0869140625,
						rotation : -1545636.3505859375,
						radius : 935441.6943359375,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 817565.6953125,
						y : 1926701.4306640625,
						w : 1348080.5419921875,
						h : -1284919.291015625,
						rotation : 533739.759765625,
						radius : -1197262.7470703125,
					),
					channel_id : 4059776570258648233,
					msg_id : 73,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 57374.8740234375,
						y : 12216.7666015625,
						w : 791130.8564453125,
						h : 649267.19140625,
						rotation : -1003882.947265625,
						radius : -6442.4677734375,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 62,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 913411.1552734375,
						y : -1502096.1025390625,
						w : -1916807.10546875,
						h : 732713.931640625,
						rotation : -866472.64453125,
						radius : 463448.19921875,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : -968376.732421875,
						y : 1106788.26953125,
						w : 1793789.197265625,
						h : 591038.1748046875,
						rotation : 53218.169921875,
						radius : -1687695.05859375,
					),
					emoji : 'j0gclqzM5pIQOoJY',
					temperature_c : 1609396.0400390625,
					color : 47,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : 1941404.3720703125,
						y : 811974.162109375,
						w : 31809.8828125,
						h : 217274.904296875,
						rotation : 1666012.775390625,
						radius : -398129.8798828125,
					),
					slug : 'HKtG0hJsg1fSkAzQ',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-8983492550267067344),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(1839504521735036336),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4309561650445295363),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(5973844777086336030),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 57,
				forwards_count : 59,
				reactions : array(
					$client->reactionCount(
						chosen_order : 95,
						reaction : $client->reactionEmpty(...),
						count : 46,
					),
				),
				reactions_count : 6,
				recent_viewers : array(7328728812865217060),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(20),
			music : $client->documentEmpty(
				id : 2327309519202982623,
			),
		),
	),
);
```