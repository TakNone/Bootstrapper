# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 216

```tl
messages.votesList#4899484e flags:# count:int votes:Vector<MessagePeerVote> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of votes for all options (or only for the chosen option, if provided to messages.getPollVotes) |
| <mark>votes</mark> | [`Vector<MessagePeerVote>`](type/MessagePeerVote) | Vote info for each user |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users that voted in the poll |
| **next_offset** | [`flags.0?string`](type/string) | Offset to use with the next messages.getPollVotes request, empty string if no more results are available |

---

## Type

[messages.VotesList](type/messages.VotesList)

---

## Example

```php
$messagesVotesList = $client->messages->votesList(
	count : 18,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : 1770985442810350346,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 8,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : -3987172634930983040,
			),
			date : 45,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : -2060929657157751182,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 27,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2953982523418496118,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4065263080987170836,
			title : 'hxVlWpQX1wdHrtC5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 24,
			version : 23,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : -2008144660525643845,
			title : 'BLpufCAM0sPm1NVD',
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
			id : -2545088140824917647,
			access_hash : -3420829354393723455,
			title : 'qO7PsjvLg82SmnXN',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5JdXWmsglwEoyMDv',
					reason : '2CdWHThxeifIlQpr',
					text : '3vaJcFOLWR4jDr1x',
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
				until_date : 54,
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
				until_date : 97,
			),
			participants_count : 34,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 91,
				background_emoji_id : 4759327618832113526,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 7997024578833325710,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 82,
			subscription_until_date : 12,
			bot_verification_icon : -674229936327963959,
			send_paid_messages_stars : -4600181319799413029,
			linked_monoforum_id : 3525252241510617346,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 353244507569520402,
			access_hash : -3139369153531045086,
			title : '0b5kHpJQLjq6g9xT',
			until_date : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9089503953131634787,
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
			id : 6283928782425171621,
			access_hash : 1649796130655302704,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YprD4yCxaV0Ecf8g',
					reason : 'gUGVCo5t6mHdwRey',
					text : 'wV582NRZComzLckF',
				),
			),
			bot_inline_placeholder : 'Ap5mdPn14hlg8wV2',
			lang_code : 'TXn7k30UZClNpAs6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 44,
			color : $client->peerColor(
				color : 79,
				background_emoji_id : 7975085868347050126,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 3849016913114219231,
			),
			bot_active_users : 97,
			bot_verification_icon : -3043792598072847676,
			send_paid_messages_stars : -4885873723487993073,
		),
	),
	next_offset : 'i7o0gU4qW5JQeDt9',
);
```