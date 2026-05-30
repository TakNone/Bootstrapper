# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 225

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -8496130409031749305,
		),
		max_read_id : 1,
		stories : array(
			$client->storyItemDeleted(
				id : 87,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 32,
				date : 27,
				expire_date : 1,
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
				id : 36,
				date : 64,
				from_id : $client->peerUser(
					user_id : 2559438229777601016,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'PILny3HMR07mKDc5',
					story_id : 61,
				),
				expire_date : 86,
				caption : 'VbO4mriPI3weqdgH',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 15,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 68,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 14,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 0,
						language : 'sXxEC2ondN6FLiYM',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 67,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 41,
						user_id : 1745572383054984312,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 56,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : 7298116868037607379,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 71,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 91,
						date : 14,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 10,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 67,
						old_text : 'gxyA6oK7Oni9fJka',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 51,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'Bt9MLiFoWaepQd0x',
						address : 'KUHwmthx2o8G6INW',
						provider : '0ujmM68RgadzeXE7',
						venue_id : 'g25rmJC4qXn7cAUf',
						venue_type : 'F0eZh2AgXupm1ySL',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 8461936888314432586,
						result_id : 'SjKb4cxfFQMHv15d',
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
						channel_id : 6025817633835026583,
						msg_id : 71,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 77,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'P3x85BtvTdneS1Hg',
						temperature_c : -17066.98828125,
						color : 14,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'aLsCZ83Huv5yNtU9',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-1729176236825813159),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-8702914856556450253),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-7163635614053619036),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(254270277954295809),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 16,
					forwards_count : 10,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 13,
					recent_viewers : array(-8580500161210543644),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(54),
				music : $client->documentEmpty(
					id : -4992818364681055567,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3665420043079034041,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4815272555880240052,
			title : 'rFI9mwKtRWC7G4Ed',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 49,
			version : 41,
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
				until_date : 68,
			),
		),
		$client->chatForbidden(
			id : -369810269529721071,
			title : 'ywvDlQbEFzk7SZ40',
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
			id : 713538573663720661,
			access_hash : -7724763903681140447,
			title : 'VO2rdbtmUWg7Hja3',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ExcFSN7hawGXryWl',
					reason : 'OMemGEPBTNUvn9JF',
					text : 'uqIvlErQOMSRWUxe',
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
				until_date : 90,
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
				until_date : 74,
			),
			participants_count : 72,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 50,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -9025088067542134736,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -176525667503298814,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 39,
			subscription_until_date : 60,
			bot_verification_icon : -851709714993521447,
			send_paid_messages_stars : -1972015128484690609,
			linked_monoforum_id : 2600867658791523473,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -510483567240757194,
			access_hash : -4724181940149125045,
			title : 'nX8rEQ4RcytoeNHO',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4086092860343874628,
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
			id : 4931525529491099869,
			access_hash : -3635187856641903884,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AL0JlT1kti5w27QI',
					reason : 'NmvuweL2cV7T8F9z',
					text : 'IvjkA64VBEUXHx5s',
				),
			),
			bot_inline_placeholder : '4ob1AW9GU8yYP5ID',
			lang_code : 'Bp70U3Hnta1f5Idx',
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
				max_id : 71,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : 8784250299791462614,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 8832920274954276244,
			),
			bot_active_users : 37,
			bot_verification_icon : -2223424108659426346,
			send_paid_messages_stars : -6364427113910914886,
		),
	),
);
```