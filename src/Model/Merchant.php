<?php

declare(strict_types=1);

namespace PayNL\Sdk\Model;

/**
 * Class Merchant
 *
 * @package PayNL\Sdk\Model
 */
class Merchant implements
    ModelInterface,
    Member\LinksAwareInterface,
    Member\BankAccountAwareInterface,
    Member\CreatedAtAwareInterface
{
    use Member\LinksAwareTrait;
    use Member\BankAccountAwareTrait;
    use Member\CreatedAtAwareTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $coc;

    /**
     * @var string
     */
    protected $vat;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var Address
     */
    protected $postalAddress;

    /**
     * @var Address
     */
    protected $visitAddress;

    /**
     * @var Trademarks
     */
    protected $trademarks;

    /**
     * @var ContactMethods
     */
    protected $contactMethods;

    /**
     * @return string
     */
    public function getId(): string
    {
        return (string)$this->id;
    }

    /**
     * @param string $id
     *
     * @return Merchant
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string)$this->name;
    }

    /**
     * @param string $name
     *
     * @return Merchant
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoc(): string
    {
        return (string)$this->coc;
    }

    /**
     * @param string $coc
     *
     * @return Merchant
     */
    public function setCoc(string $coc): self
    {
        $this->coc = $coc;
        return $this;
    }

    /**
     * @return string
     */
    public function getVat(): string
    {
        return (string)$this->vat;
    }

    /**
     * @param string $vat
     *
     * @return Merchant
     */
    public function setVat(string $vat): self
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return (string)$this->website;
    }

    /**
     * @param string $website
     *
     * @return Merchant
     */
    public function setWebsite(string $website): self
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPostalAddress(): Address
    {
        if (null === $this->postalAddress) {
            $this->setPostalAddress(new Address());
        }
        return $this->postalAddress;
    }

    /**
     * @param Address $postalAddress
     *
     * @return Merchant
     */
    public function setPostalAddress(Address $postalAddress): self
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getVisitAddress(): Address
    {
        if (null === $this->visitAddress) {
            $this->setVisitAddress(new Address());
        }
        return $this->visitAddress;
    }

    /**
     * @param Address $visitAddress
     *
     * @return Merchant
     */
    public function setVisitAddress(Address $visitAddress): self
    {
        $this->visitAddress = $visitAddress;
        return $this;
    }

    /**
     * @return Trademarks
     */
    public function getTrademarks(): Trademarks
    {
        if (null === $this->trademarks) {
            $this->setTrademarks(new Trademarks());
        }
        return $this->trademarks;
    }

    /**
     * @param Trademarks $trademarks
     *
     * @return Merchant
     */
    public function setTrademarks(Trademarks $trademarks): self
    {
        $this->trademarks = $trademarks;
        return $this;
    }

    /**
     * @param Trademark $trademark
     *
     * @return Merchant
     */
    public function addTrademark(Trademark $trademark): self
    {
        $this->getTrademarks()->addTrademark($trademark);
        return $this;
    }

    /**
     * @return ContactMethods
     */
    public function getContactMethods(): ContactMethods
    {
        if (null === $this->contactMethods) {
            $this->setContactMethods(new ContactMethods());
        }
        return $this->contactMethods;
    }

    /**
     * @param ContactMethods $contactMethods
     *
     * @return Merchant
     */
    public function setContactMethods(ContactMethods $contactMethods): self
    {
        $this->contactMethods = $contactMethods;
        return $this;
    }

    /**
     * @param ContactMethod $contactMethod
     *
     * @return Merchant
     */
    public function addContactMethod(ContactMethod $contactMethod): self
    {
        $this->getContactMethods()->addContactMethod($contactMethod);
        return $this;
    }
}