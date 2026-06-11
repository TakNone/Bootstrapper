# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 227

```tl
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_more** | [`flags.0?true`](type/true) | Whether more results can be fetched as described here » |
| <mark>count</mark> | [`int`](type/int) | Total number of active (or active and hidden) stories |
| <mark>state</mark> | [`string`](type/string) | State to use for pagination |
| <mark>peer_stories</mark> | [`Vector<PeerStories>`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Current stealth mode information |

---

## Type

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->allStories(
	has_more : true,
	count : 90,
	state : 'ovXRM6lABfWI0ibS',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 3081438745050103448,
			),
			max_read_id : 95,
			stories : array(
				$client->storyItemDeleted(
					id : 22,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 54,
					date : 2,
					expire_date : 65,
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
					id : 66,
					date : 21,
					from_id : $client->peerUser(
						user_id : -6139640728149150470,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'IkEsTZMudi30OQVl',
						story_id : 54,
					),
					expire_date : 100,
					caption : 'ZQYjvDAXziy8a2k6',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 75,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 90,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 81,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 56,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 77,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 95,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 99,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 34,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 12,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 54,
							language : 'lS8F39LDh2mcdIMK',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 31,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 20,
							user_id : 4849214756343708676,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 36,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 53,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 98,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 14,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 21,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 4,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 85,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 93,
							document_id : 8652416087536506125,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 17,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 46,
							date : 67,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 13,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 37,
							old_text : 'QItvrP1EhpH3kg5m',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 38,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'PAf4Y63gZXJqKFwn',
							address : 'fjrUCWZzAN35ebPv',
							provider : 'F1kyGIshxDVzULvn',
							venue_id : '4ym0N82MBw7uh3VQ',
							venue_type : 'zawyCGQP2dqLIoJM',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : 2966332489259243714,
							result_id : 'pt3mT7zhDLcBC6uQ',
						),
						$client->mediaAreaGeoPoint(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							address : $client->geoPointAddress(...),
						),
						$client->mediaAreaSuggestedReaction(
							dark : true,
							flipped : true,
							coordinates : $client->mediaAreaCoordinates(...),
							reaction : $client->reactionEmpty(...),
						),
						$client->mediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel_id : -2047588699492199450,
							msg_id : 87,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 11,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'VBmFi1OGbUCu05AX',
							temperature_c : 566280.2353515625,
							color : 39,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'FSRjyGKvkMb9dgcB',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-3911341982245930288),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(4728345645424913043),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-4531894241144655193),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(4256806218233464200),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 86,
						forwards_count : 81,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 6,
						recent_viewers : array(-5258792927835666276),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(46),
					music : $client->documentEmpty(
						id : -20837303467889108,
					),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3461852515401118917,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -685578829762354410,
			title : 'NwuFBPpmkAX9UbIQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 86,
			version : 10,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
				manage_ranks : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : -3681089138988346414,
			title : '7Z46z8NaB2PVMEUY',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -531545323005776360,
			access_hash : 3246971743449434877,
			title : 'A4vEG3SRaJieDyKl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ujcUdNBrapVAzMvk',
					reason : 'kDgwa2QVFZbN0ApK',
					text : 'KzNqrLPbhxwAgCeZ',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
				manage_ranks : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 22,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				edit_rank : true,
				send_reactions : true,
				until_date : 7,
			),
			participants_count : 10,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 6,
				background_emoji_id : -2224767082851210955,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 7538844973468968819,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 46,
			subscription_until_date : 41,
			bot_verification_icon : 2759862439550922233,
			send_paid_messages_stars : -9096793993659528535,
			linked_monoforum_id : 5543692771163831379,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 2294633811256920563,
			access_hash : 8685248858687489123,
			title : 'UmLRbFJZ5XAah8lj',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2199170580688780605,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : -7465879661021109190,
			access_hash : -3473617638638133315,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'i4IDWNCdGa7QVZ38',
					reason : 'vU8gIfVnPWwitNQG',
					text : 'asWrILxRMZ0h4Ddt',
				),
			),
			bot_inline_placeholder : 'kH8JOGwRlL05FqEP',
			lang_code : 'nUVGAtKEPfqpc29R',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 6,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 4350242907919373917,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -6301132589166208909,
			),
			bot_active_users : 43,
			bot_verification_icon : 1303359173143932886,
			send_paid_messages_stars : -6323760608052563366,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 66,
		cooldown_until_date : 60,
	),
);
```