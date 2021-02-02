<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Client
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Composant
 *
 * @property-read \App\Models\FamilleComposant|null $familleComposant
 * @property-read \App\Models\Fournisseur|null $fournisseur
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant query()
 */
	class Composant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ComposantModule
 *
 * @property int $id_module
 * @property int $id_composant
 * @method static \Illuminate\Database\Eloquent\Builder|ComposantModule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComposantModule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComposantModule query()
 * @method static \Illuminate\Database\Eloquent\Builder|ComposantModule whereIdComposant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComposantModule whereIdModule($value)
 */
	class ComposantModule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Couverture
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture query()
 */
	class Couverture extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Devis
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom_projet
 * @property string $reference_projet
 * @property int $id_client
 * @property-read \App\Models\Client|null $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Facturation[] $facturations
 * @property-read int|null $facturations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereNomProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereReferenceProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereUpdatedAt($value)
 */
	class Devis extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Facturation
 *
 * @property-read \App\Models\Devis|null $devis
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation query()
 */
	class Facturation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FamilleComposant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant query()
 */
	class FamilleComposant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Finition
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition query()
 */
	class Finition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fournisseur
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur query()
 */
	class Fournisseur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gamme
 *
 * @property-read \App\Models\Composant|null $composant
 * @property-read \App\Models\Finition|null $finition
 * @property-read \App\Models\Isolant|null $isolant
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @property-read \App\Models\OssatureBois|null $ossatureBois
 * @property-read \App\Models\Couverture|null $ouverture
 * @property-read \App\Models\QualiteHuisserie|null $qualiteHuisserie
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme query()
 */
	class Gamme extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Isolant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant query()
 */
	class Isolant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Module
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \App\Models\Gamme|null $gamme
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Montant[] $montants
 * @property-read int|null $montants_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Remplissage[] $remplissage
 * @property-read int|null $remplissage_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ModulesDevis
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis query()
 */
	class ModulesDevis extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Montant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant query()
 */
	class Montant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OssatureBois
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois query()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereUpdatedAt($value)
 */
	class OssatureBois extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QualiteHuisserie
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie query()
 */
	class QualiteHuisserie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Remplissage
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage query()
 */
	class Remplissage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @property-read \App\Models\TypeSection|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeParameter
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeSection[] $typeSections
 * @property-read int|null $type_sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter query()
 */
	class TypeParameter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeSection
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeParameter[] $parametres
 * @property-read int|null $parametres_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection query()
 */
	class TypeSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

