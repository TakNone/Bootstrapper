# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 218

```tl
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 47,
	state : 'S60JWmoZldUADtcj',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : -7590497953630737247,
			),
			max_read_id : 57,
			stories : array(
				$client->storyItemDeleted(
					id : 89,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 0,
					date : 37,
					expire_date : 68,
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
					id : 76,
					date : 81,
					from_id : $client->peerUser(
						user_id : -679988532691643595,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'WjF7gUfQZ8V2eXlk',
						story_id : 70,
					),
					expire_date : 71,
					caption : 'Ta3H9vA1pqFRwXE2',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 32,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 69,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 50,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 12,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 94,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 44,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 5,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 30,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 62,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 54,
							language : 'CxES0aWci2rTQZMH',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 41,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 10,
							user_id : 4346576215139551153,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 14,
							user_id : $client->get_input_user(peer : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 85,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 4,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 38,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 42,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 61,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 17,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 37,
							document_id : 6940800956309431420,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 54,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'CbQgEmBv1q7RAwOn',
							address : 'kxEdl2H50Rq4zWcs',
							provider : '7H40lyhADIjXUZrG',
							venue_id : 'X7zoTJwSsULndhFt',
							venue_type : 'L0iGorPeulFXwdpR',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : -7510142203557168481,
							result_id : '7yNP68sHFnt5fIJu',
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
							channel_id : -374303895724612466,
							msg_id : 61,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(peer : '@LiveProto'),
							msg_id : 34,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'mM7h2SVvjNHEIenr',
							temperature_c : -1646742.029296875,
							color : 85,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'gmVbyZcSXR5TYBOi',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(2306117670695831584),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(-237692679317019939),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-5217473404757551547),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(1636866050506218618),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 81,
						forwards_count : 94,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 8,
						recent_viewers : array(-3512177530669536916),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(41),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7152276146840951191,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -267639477167957969,
			title : 'LFlkpjmOwMye0VoI',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 4,
			version : 26,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : 4796311917282259593,
			title : '7Tm0GKkhgwlDMcRN',
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
			id : 7030669890498797361,
			access_hash : 6652151463337051309,
			title : '5JX4vK2gYN7Qjwpu',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wnDHGaj6rZP89XvK',
					reason : 'tXxb1USz6vdTPVho',
					text : 'fURBqjsEPWw3H5DV',
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
				until_date : 31,
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
				until_date : 61,
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : -1244019905760411610,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : -6535634052285969202,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 13,
			bot_verification_icon : -5290302407473590514,
			send_paid_messages_stars : -3199714841432563496,
			linked_monoforum_id : 2598684692887052918,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6988217971173737152,
			access_hash : 8173616580386501223,
			title : 'QvOmjH43qgeRUcPi',
			until_date : 25,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8506957231500330371,
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
			id : 3603589379638669608,
			access_hash : 3132561198568495901,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'V6MlEYzBxwcTOQ90',
					reason : 'fTlChKoVbZ6yMruv',
					text : 'tN1V9J8PaOATZmeE',
				),
			),
			bot_inline_placeholder : 'na7WzkvRAp9xSoc5',
			lang_code : 'XK1kZUxCTN83uc4I',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 79,
				background_emoji_id : 1776257261187870222,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 5541423740885693096,
			),
			bot_active_users : 95,
			bot_verification_icon : 8620410157146053028,
			send_paid_messages_stars : -8133623023690307272,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 9,
		cooldown_until_date : 43,
	),
);
```