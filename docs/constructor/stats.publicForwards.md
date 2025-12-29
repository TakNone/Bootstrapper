# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 218

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>forwards</mark> | [`Vector<PublicForward>`](type/PublicForward) | Info about the forwards of a story |
| **next_offset** | [`flags.0?string`](type/string) | Offset used for pagination |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stats.PublicForwards](type/stats.PublicForwards)

---

## Example

```php
$statsPublicForwards = $client->stats->publicForwards(
	count : 73,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : -2214348677071477406,
				),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : -7094809960404259884,
			),
			story : $client->storyItemDeleted(
				id : 12,
			),
		),
	),
	next_offset : 'Li4lF8AR6DeNX2hH',
	chats : array(
		$client->chatEmpty(
			id : 9072129011588831378,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4555113403370348906,
			title : 'kAP7qeajZBMstmDr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 70,
			date : 14,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 6856361904747241920,
			title : 'ralUVwQ9yHSJ4cvD',
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
			id : -7463517112423564108,
			access_hash : 1998412897817557567,
			title : 'uKekaVXdC41bnGfp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lxoRXVJIndev8ba7',
					reason : 'xDc9VJFbuk17WtCU',
					text : '2oBOq3TKGerzlLhY',
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
				until_date : 7,
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
				until_date : 93,
			),
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -525690451389943751,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : -1874182688872496298,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 88,
			bot_verification_icon : -8910950600194162920,
			send_paid_messages_stars : -5003628554489764751,
			linked_monoforum_id : 5934741298629227533,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5534177756439473739,
			access_hash : 6324615914477780730,
			title : 'EZb4DH09cVRkw2in',
			until_date : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6040003004122240126,
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
			id : 4654825771605258923,
			access_hash : -4898023904855752723,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dTvwDCAtSk7HrUOy',
					reason : 'xIaQowKkdX5Ytql2',
					text : 'LRDokSuvlHEPMI9V',
				),
			),
			bot_inline_placeholder : 'Jx1O96GP8K0DFa5c',
			lang_code : 'PI7CeQjBUg5cZzlY',
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
				max_id : 77,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -6707457598978323351,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : 8050842010916378465,
			),
			bot_active_users : 32,
			bot_verification_icon : -5873397263015873340,
			send_paid_messages_stars : 9004312368228921635,
		),
	),
);
```