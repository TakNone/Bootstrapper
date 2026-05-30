# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 225

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
	count : 34,
	state : '6Y3Kcl0AsIjNSXCM',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 3348079776069560363,
			),
			max_read_id : 59,
			stories : array(
				$client->storyItemDeleted(
					id : 85,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 91,
					date : 42,
					expire_date : 73,
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
					id : 64,
					date : 69,
					from_id : $client->peerUser(
						user_id : -3160733315464777911,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'IMdjYp6RC3xtKLhU',
						story_id : 79,
					),
					expire_date : 7,
					caption : '3aYvrfMgxP9ekQX4',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 66,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 95,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 82,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 48,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 43,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 8,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 77,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 4,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 76,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 0,
							language : 'T1jwKPnCoSgzhQvN',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 64,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 0,
							user_id : 5468962120577228597,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 73,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 58,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 35,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 91,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 74,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 82,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 93,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 86,
							document_id : 5049037619502320767,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 84,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 11,
							date : 57,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 17,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 93,
							old_text : 'RV8fHlvWBoJCqytb',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 24,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'CZIqi9uaSgYvs51y',
							address : 'ERMBbf1pkgVwli50',
							provider : 'mc4WTzjP6Jn8peKM',
							venue_id : 'R06CXkinBrALscFu',
							venue_type : 'eMz9oEuZmlG4anpS',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : -2617215746950211230,
							result_id : 'SHD6Owlcs0L3gUy1',
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
							channel_id : -209650333030105759,
							msg_id : 77,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 98,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'zh9QAnxjiPqISZ2f',
							temperature_c : 1111582.83984375,
							color : 51,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : 'Q6CJkKY79fXrGHqj',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(5058345461212231883),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(-3477546613996744851),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-7303521582330581454),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(5864038543454652216),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 52,
						forwards_count : 15,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 40,
						recent_viewers : array(7077032772864307857),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(82),
					music : $client->documentEmpty(
						id : 3217521025906308310,
					),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7532386424968109167,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9146824431441910135,
			title : 'wNFHaub4rkCR9i6E',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 27,
			version : 61,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : -197327542271106945,
			title : 'gl78sTvK6GWOQuoV',
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
			id : -2183627644898500496,
			access_hash : -3767827907835960910,
			title : 'BvoY3CRNxDia1JVA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HVd9CQiWtxDekSmA',
					reason : 'jBGNkamPoS0K7WbD',
					text : 'ktumdLGsOqf17yX0',
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
				until_date : 50,
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
				until_date : 94,
			),
			participants_count : 8,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 51,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : 5644523380123552830,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -1918040046378348277,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 59,
			subscription_until_date : 48,
			bot_verification_icon : 8724800161084415056,
			send_paid_messages_stars : 275391967593546539,
			linked_monoforum_id : -8853082178833649731,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8045176425484537771,
			access_hash : 3154663307990121644,
			title : 'acBeASn6GkIwLRor',
			until_date : 82,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6518048488905746003,
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
			id : 3437951302400155675,
			access_hash : 2523886777025702670,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dTLhZMgnym9IWXSF',
					reason : '6KlmuOU7jRqXa4p8',
					text : 'aFKDk0B7GLT3ApJ8',
				),
			),
			bot_inline_placeholder : 'QhMpdycLT04Swq1v',
			lang_code : 'UzhpJAmQfZwD0XCF',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 2881000752053830615,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -2288729419617236963,
			),
			bot_active_users : 2,
			bot_verification_icon : 7991644599948455426,
			send_paid_messages_stars : -7628095369395860431,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 55,
		cooldown_until_date : 82,
	),
);
```