# account.businessChatLinks

**Description** : *Contains info about business chat deep links &raquo; created by the current account*

**Layer** : 227

```tl
account.businessChatLinks#ec43a2d1 links:Vector<BusinessChatLink> chats:Vector<Chat> users:Vector<User> = account.BusinessChatLinks;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>links</mark> | [`Vector<BusinessChatLink>`](type/BusinessChatLink) | Links |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[account.BusinessChatLinks](type/account.BusinessChatLinks)

---

## Example

```php
$accountBusinessChatLinks = $client->account->businessChatLinks(
	links : array(
		$client->businessChatLink(
			link : 'AjdsVghkZy9z6Kv4',
			message : '1nlZ8E6QdjmGkIYR',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 52,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 78,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 89,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 6,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 84,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : 'tvf2A03FTo8ru7UM',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 55,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : -8530691997302400036,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 21,
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
					length : 84,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 26,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 92,
					document_id : 6930753782604606278,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 45,
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
					date : 49,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 59,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 78,
					old_text : '7aY6RkPGJDz3sUBI',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 83,
				),
			),
			title : 'JpRun45elvfCGxB3',
			views : 27,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -445453003059737051,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8851855417505427740,
			title : 'WvnoaBN3PAR5EdTp',
			photo : $client->chatPhotoEmpty(),
			participants_count : 27,
			date : 0,
			version : 90,
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
				until_date : 21,
			),
		),
		$client->chatForbidden(
			id : 5353495773854456540,
			title : 'd0m31zGRoTUg8NOv',
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
			id : 4336994455224099325,
			access_hash : -6697149637101536096,
			title : '6fkcI4PNUgbamArd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6dcQIrKXPVGyE5tx',
					reason : 'amNWCxhwH5y1qO8b',
					text : 'AHJGxE431a7TMBX8',
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
				until_date : 16,
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
				until_date : 5,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 9,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 1043551232801904447,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -3263892587514743566,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 22,
			subscription_until_date : 53,
			bot_verification_icon : 343839521621111825,
			send_paid_messages_stars : -345677906209504211,
			linked_monoforum_id : 8957306923536234866,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 4619759914452680101,
			access_hash : -1072625896292006633,
			title : 'uvwIbzCAcBsJ6lKM',
			until_date : 97,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7187315344915236160,
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
			id : 5564001603354830189,
			access_hash : -1028085307136182580,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Wc7ruXho4xZpJnFk',
					reason : 'faeE2yIb89hxToF6',
					text : 'sfjrKTNIn3GPAqgD',
				),
			),
			bot_inline_placeholder : 'ZcuYdVhEpTagBfKG',
			lang_code : 'OPMAjzU3pNiIeZBS',
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
				max_id : 3,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : 6731460636118739198,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -813460721543282330,
			),
			bot_active_users : 26,
			bot_verification_icon : -361009926928136566,
			send_paid_messages_stars : -6882322102051592481,
		),
	),
);
```